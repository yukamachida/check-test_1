<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css' )}}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <div class="header">

        <div class="header__logo">
            FashionablyLate
        </div>
        <div class="header-list">
            <button>login</button>
        </div>

        <main>
            <div class="register-form__content">
                <div class="register-form__heading">
                    <h2>Register</h2>
                </div>

                <form action="/register" method="POST">
                    @csrf
                    <span class="form__label--item">お名前
                    </span>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例:山田 太郎" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">
                            メールアドレス
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@exampl.com" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__growp-title">
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
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">登録</button>
                    </div>




                </form>
            </div>
        </main>
</body>

</html>