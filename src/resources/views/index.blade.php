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
    <header class="header">

        <div class="header__logo">
            FashionablyLate
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
        </div>

        <form class="form" action="/confirm" method="POST">
            @csrf

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前
                    </span>
                    <span class="form__label--red">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="name" name="first_name" placeholder="例:山田" />
                        <input type="name" name="last_name" placeholder="例:太郎" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--red">※</span>
                </div>
                <div class="form__group-content">
                    <select name="gender" id="gender">
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--red">※</span>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--red">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="tel" name="first_part" placeholder="090" />
                        <span>-</span>
                        <input type="tel" name="second_part" placeholder="1234" />
                        <span>-</span>
                        <input type="tel" name="third_part" placeholder="5678" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--red">※</span>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="address" name="building" placeholder="例:千駄ヶ谷マンション101" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--red">※</span>
                </div>
                <select class="create-form__item-select" name="category_id">
                    <option value="">選択してください</option>
                </select>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--red">※</span>
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                    </div>
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>

            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </main>
    </div>
</body>

</html>