<!-- トップメニュー -->
<header class="main-header">

    <!-- ロゴ -->
    <a href="" class="logo">採点者</a>

    <!-- トップメニュー -->
    <nav class="navbar navbar-static-top navbar-custom-menu" role="navigation">

        <ul class="nav navbar-nav">

        @if(Auth::check())
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset("img/icon.png") }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">ログイン中ユーザー太郎</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ asset("img/icon.png") }}" class="img-circle" alt="User Image">
                            <p>
                                ログイン中ユーザー太郎
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">ユーザー情報</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" id="logout" class="btn btn-default btn-flat">ログアウト</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">ログイン</a>
                </li>

            @endif





        </ul>
    </nav>

</header><!-- end header -->
