<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConfirmationTest</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
        FashionablyLate
            </a>
        </div>
    </header>

<main>
    <div class="contact-form__content">
        <div class="content-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="form">
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="first_name" placeholder="例:山田" />
                        <input type="text" name="last_name" placeholder="例:太郎" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__check--label">
                        <input type="radio" name="gender" value="男" checked>男
                        <input type="radio" name="gender" value="女">女
                        <input type="radio" name="gender" value="その他">その他
                    </div>
                    <div class="form_error">
                    <!--バリデーション-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="tel" name="tell" placeholder="080" />-
                        <input type="tel" name="tell" placeholder="1234" />-
                        <input type="tel" name="tell" placeholder="5678" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__check--label">
                        <select name="categories">
                            <option value="0" disabled selected>選択してください</option>
                            <option value="1">商品のお届けについて</option>
                            <option value="2">商品の交換について</option>
                            <option value="3">商品トラブル</option>
                            <option value="4">ショップへのお問い合わせ</option>
                            <option value="5">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </div>
            </form>
        </div>
    </main>
</body>
</html>