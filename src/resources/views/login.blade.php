<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <div class="headeer">
        <div class="header__logo">
            FashionablyLate
        </div>
        <div class="header-list">
            <button>register</button>
        </div>
    </div>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>

            <form action="{{ route('login')}}" method="POST">
                <div class="form__group-title">
                    <span class="form__label--item">
                        メールアドレス
                    </span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">パスワード</span>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="password" name="password" placeholder="例:coachtech1106" />
                                </div>
                            </div>
                        </div>

                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>

            </form>


        </div>




    </main>

</body>

</html>