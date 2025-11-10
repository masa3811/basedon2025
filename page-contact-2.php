 <?php
  get_header();
  ?>

  <div id="contact-2">
    <!-- キービジュアル -->
    <section class="kv">
      <div class="kv-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/contact_title-pc.jpg" alt="お問い合わせ-1トップ画像">
        <div class="page-ttl">
          <h3>Contact</h3>
          <p>お問い合わせ</p>
        </div>
      </div>
    </section>

    <main id="main">
      <section class="pages-contact">
        <div class="img-wrap">
          <div class="inner-300">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/contact-step2.png" alt="お問い合わせ-step1画像">
          </div>

        </div>
        <div class="inner-1000">
          <div class="contact-table-wrap">
            <table class="table-contact-1">
              <tr>
                <th class="narrow-th"><span class="required">必須</span>お問い合わせの分類</th>
                <td class="wide-td">
                  <label>
                    <input type="radio" name="inquiry_type" value="other">
                    採用について
                  </label><br class="pc-only">
                  <label>
                    <input type="radio" name="inquiry_type" value="product" required>
                    相談したい
                  </label><br class="pc-only">
                  <label>
                    <input type="radio" name="inquiry_type" value="other">
                    その他
                  </label>

                </td>
              </tr>
              <tr>
                <th class="narrow-th"><span class=" required">必須</span>お名前</th>
                <td class="wide-td">
                  <div class="table-flex-1">
                    <div class="table-flex-2">
                      <label for="last_name">姓</label>
                      <input type="text" id="last_name" name="last_name" placeholder="例：山田" required>
                    </div>
                    <div class="table-flex-2">
                      <label for="first_name">名</label>
                      <input type="text" id="first_name" name="first_name" placeholder="例：太郎" required>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="narrow-th"><span class=" required">必須</span>フリガナ</th>
                <td class="wide-td">
                  <div class="table-flex-1">
                    <div class="table-flex-2">
                      <label for="furigana_last">セイ</label>
                      <input type="text" id="furigana_last" name="furigana_last" placeholder="ヤマダ" required>
                    </div>
                    <div class="table-flex-1">
                      <div class="table-flex-2">
                        <label for="furigana_first">メイ</label>
                        <input type="text" id="furigana_first" name="furigana_first" placeholder="タロウ" required>
                      </div>
                    </div>
                </td>
              </tr>
              <tr>
                <th class="narrow-th"><span class=" required">必須</span>電話番号</th>
                <td class="wide-td">
                  <label for="phone">
                    ※つながりやすい番号をご記入ください
                  </label>
                  <input type="tel" id="phone" name="phone" placeholder="09012345678" required>
                </td>
              </tr>
              <tr>
                <th class="narrow-th"><span class=" required">必須</span>メールアドレス</th>
                <td class="wide-td">
                  <input type="email" id="mail" name="phone" placeholder="example@mail.com" required>
                </td>
              </tr>
            </table>
            <div class="table-dot table-txt type-1"><span>※ 採用に応募する方は以下もご記入ください</span></div>
            <table class="table-contact-2">
              <tr>
                <th class="middle-th">生年月日</th>
                <td class="wider-td">
                  <div class="table-flex-1">
                    <input type="number" name="birth_year" placeholder="西暦" min="1900" max="2100">年
                    <input type="number" name="birth_month" placeholder="月" min="1" max="12">月
                    <input type="number" name="birth_day" placeholder="日" min="1" max="31">日
                  </div>
                </td>
              </tr>
              <tr>
                <th class="middle-th">郵便番号</th>
                <td class="post-number wider-td">
                  <input type="text" name="zip1" size="3" maxlength="3">
                </td>
              </tr>

              <tr>
                <th class="middle-th">都道府県</th>
                <td class="wider-td"><input type="text" name="prefecture-name"></td>
              </tr>
              <th class="middle-th">区町村</th>
              <td class="wider-td"><input type="text" name="city-name"></td>
              </tr>
              <tr>
                <th class="middle-th">番地・ビル名</th>
                <td class="wider-td"><input type="text" name="address-detail"></td>
              </tr>
            </table>
            <div class="table-dot table-txt"><span></span></div>

          <table class="table-contact-1">
            <tr>
              <th class="middle-th">お問い合わせの内容</th>
              <td class="wider-td"><textarea cols="40" rows="10" name="contact-detail"></textarea></td>
            </tr>
          </table>
        </div>

        <div class="contact-table-wrap">
          <table class="table-contact-1">
            <tr>
              <th class="narrow-th"><span class=" required">必須</span>同意確認</th>
              <td class="wider-td">
                <div class="privacy-cnt">
                  <a href="#" style="text-decoration: underline;color: blue;">プライバシーポリシー</a>&emsp;<span
                    style="color:#f84a2a;">を確認して同意のうえチェックを入れてください</span>
                  <div class="privacy-check inner-500">
                    <label>
                      <input type="checkbox" name="agree" id="agree-check" required>
                      個人情報の取扱について同意します
                    </label>
              </td>
            </tr>
          </table>
        </div>
        <div class="submit-row">
          <button id="submit-btn" class="inactive" type="button">確認画面へ</button>
        </div>
  </div>


  </section>
  </main>
  </div>


   <?php
  get_footer();
  ?>