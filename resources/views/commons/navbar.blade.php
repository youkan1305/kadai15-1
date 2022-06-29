<div class="b-example-divider"></div>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-4 mb-2 mb-md-0 text-dark text-decoration-none">
        <h3>SAZANAMI coffee shop</h3>
      </a>
　　　<dir class="offset-md-8 col-md-4">
          {{-- ユーザ登録ページへのリンク --}}
          <button type="button" class="btn">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link btn btn-outline-primary me-2']) !!}</button>
          {{-- ログインページへのリンク --}}
          <button type="button" class="btn"><a href="#" class="nav-link btn btn-outline-primary me-2">Login</a></button>
          <button type="button" class="btn ">
                <i class="fab fa-twitter-square"></i>
          </button>
          <button type="button" class="btn text-end">
                <i class="fab fa-instagram-square"></i>
          </button>
      </dir>
      
    </header>
 </div>
