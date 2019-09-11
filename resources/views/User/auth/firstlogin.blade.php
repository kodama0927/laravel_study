@extends('User.layouts.layout')

@section('content')

    <section class="content-header">
        <h1>初回ログイン</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <form>
                    <div class="form-group">
                        <label>企業ID</label>
                        <input type="text" name="company_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>社員ID</label>
                        <input type="text" name="member_id" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success pull-right">次へ</button>
                </form>
            </div>
        </div>
    </section>


@endsection
