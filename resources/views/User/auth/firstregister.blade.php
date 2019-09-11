@extends('User.layouts.layout')

@section('content')

    <section class="content-header">
        <h1>初回登録</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="">
                    <p>次回以降メールアドレスとパスワードでのログインとなります</p>
                </div>
                <form>
                    <div class="form-group">
                        <label>名前</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>メールアドレス</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>パスワード</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>パスワード（確認用）</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>企業ID</label>
                        <input type="text" name="company_id" value="前ページで入力したID" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>社員ID</label>
                        <input type="text" name="member_id" value="前ページで入力したID" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success pull-right">登録</button>
                </form>
            </div>
        </div>
    </section>


@endsection
