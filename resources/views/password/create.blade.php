@extends('layouts.guest')

@section('content')

<div class="container">
  <h3>パスワード新規作成</h3>
</div>

<div class="container" id="app">
  <div class="row">
    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
      <h1 class="alert alert-info text-center mt-2">パスワード生成</h1>
      <div class="input-group my-4">
        <input type="text" class="form-control" readonly :value="password" aria-describedby="button-copy">
        <button @click="writeToClipboard(password)" class="btn btn-outline-secondary" type="button" id="button-copy">COPY</button>
        <button @click="register(password)" class="btn btn-outline-secondary" type="button" id="button-register">REGISTER</button>
      </div>
      <div class="card mt-4">
        <div class="card-header">
          <h2 class="m-0 h6">条件</h2>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <div class="condition">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="small_alpha" v-model="small_alpha">
                <label class="form-check-label" for="small_alpha">英小文字</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="big_alpha" v-model="big_alpha">
                <label class="form-check-label" for="big_alpha">英大文字</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="number" v-model="numbers">
                <label class="form-check-label" for="number">数字</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="symbol" v-model="symbols">
                <label class="form-check-label" for="symbol">記号</label>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <label for="length" class="col-form-label">文字数</label>
            <div class="ms-3">
              <input type="number" class="form-control" id="length" v-model="strLength" min="4">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 text-center">
        <button @click="reset++" class="btn btn-outline-dark px-5">再生成</button>
      </div>
      <footer class="bg-info text-white text-center py-2 mt-4">
        &copy; candy.
      </footer>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vue.js -->
<script src="https://unpkg.com/vue@next"></script>

<script>
const pMaker = {
  data() {
    return {
      big_alpha_string: 'ABCDEFGHJKLMNPQRSTUVWXYZ', // パスワードの元になる文字列
      small_alpha_string: 'abcdefghijkmnopqrstuvwxyz', // パスワードの元になる文字列
      number_string: '1234567890', // パスワードの元になる文字列
      symbol_string: '!@#$%^&*()', // パスワードの元になる文字列
      big_alpha: false, // 英大文字を含めるかどうか
      small_alpha: true, // 英小文字を含めるかどうか
      numbers: true, // 数字を含めるかどうか
      symbols: false, // 記号を含めるかどうか
      strLength: 8, // パスワードの文字数
      reset: 0 // 再生成回数、直接必要ないがcomputedのpasswordをリアクティブに動かすために用意
    }
  },
  computed: { // 算出プロパティという、関数に近いが変数的な扱いをする、定義しておくと、中で使っている変数の値などが変わると自動実行される
    password() { // パスワードの生成と同時に出力も担っている
      const reset = this.reset // 再生成ボタンを押したときに反応するように変数定義をしている
      let source = '' // パスワードの元になる文字列を初期化
      source += (this.big_alpha ? this.big_alpha_string : '') // 大文字を含める場合に元になる文字列として挿入
      source += (this.small_alpha ? this.small_alpha_string : '') // 小文字を含める場合に元になる文字列として挿入
      source += (this.numbers ? this.number_string : '') // 数字を含める場合に元になる文字列として挿入
      source += (this.symbols ? this.symbol_string : '') // 記号を含める場合に元になる文字列として挿入
      if (!source) return '-' // 元になる文字列が空白になってしまった場合に'-'を返して終了する
      let word = this.createWord(source) // 元になる文字列からパスワードを生成
      while (true) { // 生成されたパスワードが条件に合っているかをチェックして合っていな場合は再生成することをループ処理
        let check = this.checkWord(word) // チェック後にBoolean（true or false）が返る
        if (check) { // trueの場合は問題ないので生成されたパスワードを返して終了する
          return word
        }else{ // falseの場合はパスワードを再生成する
          word = this.createWord(source)
        }
      }
    }
  },
  methods: {
    writeToClipboard(pass) { // copyボタンを押すとパスワードがコピーされる関数
      navigator.clipboard.writeText(pass).catch((e) => {
        console.error(e)
      })
    },
    register(pass) { 
      console.log("register");
      location.href = '{{ route("password.entry") }}/?pass=' + pass;
    },
    createWord(source){ // 元になる文字列からパスワードを生成する関数
      let str = ''
      for(let i=0; i < this.strLength; i++) {
        str += source.substr(Math.floor(Math.random() * source.length), 1)
      }
      return str
    },
    checkWord(word){ // 生成されたパスワードに条件通りの文字列が含まれているかのチェックをする関数
      if (this.big_alpha) {
        let check = this.includeThisWord(word, this.big_alpha_string)
        if (!check) return false
      }
      if (this.small_alpha) {
        let check = this.includeThisWord(word, this.small_alpha_string)
        if (!check) return false
      }
      if (this.numbers) {
        let check = this.includeThisWord(word, this.number_string)
        if (!check) return false
      }
      if (this.symbols) {
        let check = this.includeThisWord(word, this.symbol_string)
        if (!check) return false
      }
      return true
    },
    includeThisWord(word, target){ // 生成されたパスワードの中に条件文字列が含まれているかの判定をする関数
      let regex = new RegExp('[' + target + ']', 'g')
      let res = word.search(regex)
      if (res === -1) return false
      return true
    }
  },
}
Vue.createApp(pMaker).mount('#app')
</script>


@endsection