<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConfirmationTest</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo">FashionablyLate</a>
        <hr>
        </div>
    </header>

<main>
    Contact
<form>
    <table>
        <tr>
            <th class="name"><label>お名前</label></th>
            <td class="required">※</td>
            <td><input type="text" name="first_name" placeholder="例:山田" /></td>
            <td><input type="text" name="last_name" placeholder="例:太郎" /></td>
        </tr>
        <tr>
            <th class="gender"><label>性別</label></th>
            <td class="required">※</td>
            <td><input type="radio" name="gender" value="男" checked>男
                <input type="radio" name="gender" value="女">女
                <input type="radio" name="gender" value="その他">その他</td>
        </tr>
        <tr>
            <th class="email"><label>メールアドレス</label></th>
            <td class="required">※</td>
            <td><input type="email" name="email" placeholder="例:test@example.com" /></td>
        </tr>
        <tr>
            <th class="tel"><label>電話番号</label></th>
            <td class="required">※</td>
            <td><input type="tel" name="tell" placeholder="080" />-
                <input type="tel" name="tell" placeholder="1234" />-
                <input type="tel" name="tell" placeholder="5678" /></td>
        </tr>
        <tr>
            <th class="address"><label>住所</label></th>
            <td class="required">※</td>
            <td><input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" /></td>
        </tr>
        <tr>
            <th class="building"><label>建物名</label></th>
            <td class="required"></td>
            <td><input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" /></td>
        </tr>
        <tr>
            <th class="category"><label>お問い合わせの種類</label></th>
            <td class="required">※</td>
            <style>
                select:invalid { color: #808080; }
                select option { color: black; }
            </style>
            <td><select name="categories" required>
                    <option value="">選択してください</option>
                    <option value="1">商品のお届けについて</option>
                    <option value="2">商品の交換について</option>
                    <option value="3">商品トラブル</option>
                    <option value="4">ショップへのお問い合わせ</option>
                    <option value="5">その他</option>
                </select></td>
        </tr>
        <tr>
            <th class="detail-b"><label>お問い合わせ内容</label></th>
            <td class="required">※</td>
            <td><textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea></td>
        </tr>
    </table>
    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
    </div>
</form>