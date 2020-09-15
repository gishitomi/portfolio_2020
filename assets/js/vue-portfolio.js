var app = new Vue({
    el: '#app',
    data: {
        lists: [{
                id: 'exampleModalCenter1',
                title: 'ITと経済のまとめサイト',
                url: 'https://rec-it-site.herokuapp.com/',
                useLanguage: 'HTML / CSS / JavaSCript / PHP',
                text: 'RSSを用いて、他のwebサイトから情報を受け取り、表示させることを目標に制作。',
                urlGit: 'https://github.com/gishitomi/gishitomit',
                thumbnailSrc: './assets/img/スクリーンショット 2020-04-10 21.26.38.png',
            },
            {
                id: 'exampleModalCenter2',
                title: '沖縄の架空観光サイト',
                url: 'https://okinawa-site-2020.herokuapp.com/',
                useLanguage: 'HTML / CSS / JavaSCript / PHP',
                text: '観光目的で沖縄に来られる方を対象とした沖縄の観光サイトをまとめたサイト。',
                urlGit: 'https://github.com/gishitomi/-2020',
                thumbnailSrc: './assets/img/okinawa_off.png'
            },
            {
                id: 'exampleModalCenter3',
                title: 'Vue.jsによるSPA',
                url: 'https://vue-timer.herokuapp.com/',
                useLanguage: 'HTML / CSS / JavaScript (Vue.js)',
                text: 'Vue CLIを使用し、SPA化の練習として、現在の時刻を表示させる時計アプリ、ToDoアプリの開発を行った。',
                urlGit: 'https://github.com/gishitomi/vueapp',
                thumbnailSrc: './assets/img/スクリーンショット 2020-07-12 1.21.46.png',
            },
            {
                id: 'exampleModalCenter4',
                title: 'isara模写サイト',
                url: '',
                useLanguage: 'HTML / CSS / JavaScript',
                text: '一般的なLPの構成を学ぶために作成したisaraの模写サイト。',
                thumbnailSrc: './assets/img/isara-screenshot.jpg',
            },
        ],
    },
    methods: {
        modal: function(index) {
            var modals = {
                    item: this.lists,
                }
                // console.log(this.lists.id);
        }
    }
})