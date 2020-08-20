const firstView = 5;
const addView = 5;

jQuery(document).ready(function($) {
    $(document).ready(function() {
        let maxDispCnt = 0; // 最大表示件数
        let currentDispCnt = 0; // 現在の表示件数
        let tileList = $('#notes').children('a'); // 一覧のli子要素をすべて取得
        $(tileList).each(function(i, elem) {
            // 初期表示件数のみ表示
            if (i < firstView) {
                $(this).removeClass('nodisplay');
                currentDispCnt++;
            }
            maxDispCnt++;
            // もっと見るボタンを表示
            let displayed = 0;
            if (maxDispCnt > currentDispCnt && !displayed) {
                $('.note-more').show();
                displayed = 1;
            }
        });

        // もっと見るボタンクリックイベント
        $('.note-more').click(function() {
            let newCount = currentDispCnt + addView; // 新しく表示する件数

            // 新しく表示する件数のみ表示
            $(tileList).each(function(i, elem) {
                if (currentDispCnt <= i && i < newCount) {
                    // $(this).show();
                    $(this).slideToggle(300);
                    currentDispCnt++;
                }
            });

            // もっと見るボタンを非表示
            if (maxDispCnt <= newCount) {
                $(this).hide();
            }

            return false;
        });
    });

    $(document).ready(function() {
        let maxDispCnt = 0; // 最大表示件数
        let currentDispCnt = 0; // 現在の表示件数
        let tileList = $('#qiitas').children('a'); // 一覧のli子要素をすべて取得
        $(tileList).each(function(i, elem) {
            // 初期表示件数のみ表示
            if (i < firstView) {
                $(this).removeClass('nodisplay');
                currentDispCnt++;
            }
            maxDispCnt++;
            // もっと見るボタンを表示
            let displayed = 0;
            if (maxDispCnt > currentDispCnt && !displayed) {
                $('.qiita-more').show();
                displayed = 1;
            }
        });

        // もっと見るボタンクリックイベント
        $('.qiita-more').click(function() {
            let newCount = currentDispCnt + addView; // 新しく表示する件数

            // 新しく表示する件数のみ表示
            $(tileList).each(function(i, elem) {
                if (currentDispCnt <= i && i < newCount) {
                    // $(this).show();
                    $(this).slideToggle(300);
                    currentDispCnt++;
                }
            });

            // もっと見るボタンを非表示
            if (maxDispCnt <= newCount) {
                $(this).hide();
            }

            return false;
        });
    });
});