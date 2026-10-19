<?php
session_start();

$story = [
    'start' => [
        'title' => 'THE MISSING CARD',
        'color' => '#25172f',
        'text' => [
            'id' => 'Hujan mengetuk jendela kamar tua itu. Di atas meja, sebuah kartu tarot tergeletak tanpa simbol dan tanpa nama. Ketika kau menyentuhnya, terdengar bunyi lonceng dari tempat yang tidak dapat kau lihat.',
            'en' => 'Rain tapped against the old room window. On the table lay a tarot card without a symbol or a name. When you touched it, a bell rang from somewhere you could not see.'
        ],
        'choices' => [
            [
                'id' => 'keep',
                'label' => ['id' => 'Simpan kartu', 'en' => 'Keep the card'],
                'next' => 'archive'
            ],
            [
                'id' => 'burn',
                'label' => ['id' => 'Bakar kartu', 'en' => 'Burn the card'],
                'next' => 'ashes'
            ]
        ]
    ],

    'ashes' => [
        'title' => 'ASHES OF THE UNWRITTEN',
        'color' => '#351923',
        'text' => [
            'id' => 'Api ungu melahap kartu itu tanpa menghasilkan asap. Sesaat sebelum berubah menjadi abu, permukaannya memperlihatkan tulisan yang tidak pernah kau pelajari. Pantulanmu di jendela mengangkat tangan, meskipun kau tidak bergerak.',
            'en' => 'Violet fire consumed the card without producing smoke. Just before it became ash, its surface revealed writing you had never learned. Your reflection raised a hand, even though you had not moved.'
        ],
        'choices' => [
            [
                'id' => 'investigate',
                'label' => ['id' => 'Selidiki abu', 'en' => 'Investigate the ashes'],
                'next' => 'archive'
            ],
            [
                'id' => 'reflection',
                'label' => ['id' => 'Periksa pantulan', 'en' => 'Examine the reflection'],
                'next' => 'reflection'
            ]
        ]
    ],

    'archive' => [
        'title' => 'THE ARCHIVE OF ASH',
        'color' => '#30251a',
        'text' => [
            'id' => 'Di sebuah arsip yang tidak tercantum pada peta, seorang penjaga menemukan halaman kosong di antara laporan lama. Di sudut halaman itu terdapat bekas lingkaran hitam. Penjaga tersebut menutup bukunya ketika mendengar seseorang menyebut nama yang sudah dihapus dari seluruh catatan.',
            'en' => 'In an archive absent from every map, a keeper found a blank page among old reports. A black circle marked its corner. The keeper closed the book upon hearing someone speak a name erased from every record.'
        ],
        'choices' => [
            [
                'id' => 'records',
                'label' => ['id' => 'Cari laporan lama', 'en' => 'Search old reports'],
                'next' => 'records'
            ],
            [
                'id' => 'observer',
                'label' => ['id' => 'Ikuti suara lonceng', 'en' => 'Follow the bell'],
                'next' => 'observer'
            ]
        ]
    ],

    'reflection' => [
        'title' => 'THE REFLECTION THAT STAYED',
        'color' => '#142b38',
        'text' => [
            'id' => 'Pantulan itu akhirnya bergerak. Ia menunjuk ke sebuah pintu yang tidak ada di kamar tersebut. Ketika kau berkedip, pintu itu menghilang, tetapi bayangannya tetap berada di lantai. Dari balik bayangan terdengar suara seseorang menghitung mundur.',
            'en' => 'The reflection finally moved. It pointed toward a door that did not exist in the room. When you blinked, the door vanished, but its shadow remained. From within that shadow came the sound of someone counting backward.'
        ],
        'choices' => [
            [
                'id' => 'shadow',
                'label' => ['id' => 'Ikuti bayangan', 'en' => 'Follow the shadow'],
                'next' => 'observer'
            ],
            [
                'id' => 'records',
                'label' => ['id' => 'Cari penjelasan', 'en' => 'Search for an explanation'],
                'next' => 'records'
            ]
        ]
    ],

    'records' => [
        'title' => 'THE THIRTEENTH RECORD',
        'color' => '#24203b',
        'text' => [
            'id' => 'Laporan itu menyebut sebuah peristiwa yang belum terjadi. Di baris terakhir, seseorang menuliskan bahwa kartu tanpa simbol telah dimusnahkan. Tanggalnya adalah besok. Namun, tinta pada kalimat tersebut masih basah.',
            'en' => 'The report described an event that had not yet happened. Its final line stated that a symbol-less card had been destroyed. The date was tomorrow. Yet the ink was still wet.'
        ],
        'choices' => [
            [
                'id' => 'observer',
                'label' => ['id' => 'Baca catatan terakhir', 'en' => 'Read the final record'],
                'next' => 'observer'
            ],
            [
                'id' => 'ending',
                'label' => ['id' => 'Tutup laporan', 'en' => 'Close the report'],
                'next' => 'ending'
            ]
        ]
    ],

    'observer' => [
        'title' => 'THE OBSERVER',
        'color' => '#191a32',
        'text' => [
            'id' => 'Tidak ada sosok di ujung lorong. Hanya sebuah kursi kosong dan secarik kertas bertuliskan: "Pilihan telah dicatat." Kau tidak tahu siapa yang menulisnya. Di bagian belakang kertas, terdapat bekas abu berbentuk lingkaran.',
            'en' => 'No figure stood at the end of the corridor. Only an empty chair and a note that read: "The choice has been recorded." You did not know who had written it. On the back of the note was a circular ash mark.'
        ],
        'choices' => [
            [
                'id' => 'ending',
                'label' => ['id' => 'Lihat apa yang menantimu', 'en' => 'See what awaits'],
                'next' => 'ending'
            ],
            [
                'id' => 'records',
                'label' => ['id' => 'Kembali ke arsip', 'en' => 'Return to the archive'],
                'next' => 'records'
            ]
        ]
    ],

    'ending' => [
        'title' => 'AN UNFINISHED CONCLUSION',
        'color' => '#211820',
        'text' => [
            'id' => 'Lonceng itu berbunyi sekali lagi. Semua catatan berhenti pada kalimat yang sama. Jika kau membakar kartu itu, abu masih tersimpan dalam ingatan dunia. Jika kau menyimpannya, mungkin sejak awal kartu itu bukan milikmu. Di balik layar, sebuah halaman baru menunggu untuk ditemukan.',
            'en' => 'The bell rang once more. Every record ended with the same sentence. If you burned the card, its ashes remained in the world’s memory. If you kept it, perhaps the card had never belonged to you. Beyond the page, another chapter waited to be found.'
        ],
        'choices' => []
    ]
];

if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'id';
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'], true)) {
    $_SESSION['language'] = $_GET['lang'];
}

$lang = $_SESSION['language'];

if (!isset($_SESSION['arcana'])) {
    $_SESSION['arcana'] = [
        'current' => 'start',
        'flags' => [],
        'history' => []
    ];
}

$state = &$_SESSION['arcana'];

if (isset($_GET['reset'])) {
    unset($_SESSION['arcana']);
    header('Location: index.php?lang=' . $lang);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = $state['current'];
    $choice = $_POST['choice'] ?? '';

    if ($current === 'start' && $choice === 'burn') {
        $state['flags']['burned_missing_card'] = true;
        $state['flags']['reflection_anomaly_seen'] = true;
        $state['flags']['ash_message_found'] = true;
    }

    if ($current === 'start' && $choice === 'keep') {
        $state['flags']['kept_missing_card'] = true;
    }

    $valid = false;

    foreach ($story[$current]['choices'] as $option) {
        if ($option['id'] === $choice) {
            $state['history'][] = [
                'fragment' => $current,
                'choice' => $choice
            ];
            $state['current'] = $option['next'];
            $valid = true;
            break;
        }
    }

    if ($valid) {
        $state['flags']['visited_' . $state['current']] = true;
    }

    header('Location: index.php?lang=' . $lang);
    exit;
}

$current = $state['current'];

if (!isset($story[$current])) {
    $current = 'start';
    $state['current'] = 'start';
}

$page = $story[$current];

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>THE LAST ARCANA</title>
<style>
:root {
    color-scheme: dark;
    --accent: #c5a4ff;
}
* { box-sizing: border-box; }
body {
    margin: 0;
    min-height: 100vh;
    background: <?= e($page['color']) ?>;
    color: #f3edf8;
    font-family: Georgia, serif;
    transition: background .5s ease;
}
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    padding: 20px;
    border-bottom: 1px solid #ffffff20;
}
.brand {
    font-size: 13px;
    letter-spacing: 3px;
}
a { color: var(--accent); }
.lang a { margin-left: 8px; }
main {
    width: min(760px, 100%);
    margin: auto;
    padding: 55px 22px 35px;
}
.eyebrow {
    color: var(--accent);
    letter-spacing: 4px;
    font-size: 11px;
}
h1 {
    font-size: clamp(30px, 7vw, 52px);
    font-weight: normal;
    line-height: 1.15;
    margin: 15px 0 30px;
}
.story {
    line-height: 2;
    white-space: pre-line;
    min-height: 160px;
    font-size: 17px;
    color: #e3dbe9;
}
.choices {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    margin-top: 35px;
}
.choice {
    text-align: left;
    background: #ffffff08;
    border: 1px solid #ffffff35;
    color: #f3edf8;
    padding: 20px;
    min-height: 90px;
    cursor: pointer;
    font: inherit;
    transition: .2s;
}
.choice:hover {
    border-color: var(--accent);
    background: #ffffff12;
    transform: translateY(-2px);
}
.choice small {
    display: block;
    margin-bottom: 12px;
    color: var(--accent);
    letter-spacing: 2px;
}
.status {
    margin-top: 40px;
    padding-top: 18px;
    border-top: 1px solid #ffffff20;
    color: #a99bb5;
    font: 12px Arial, sans-serif;
}
footer {
    padding: 20px;
    text-align: center;
    color: #95889e;
    font: 11px Arial, sans-serif;
}
.controls {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-top: 24px;
    font: 12px Arial, sans-serif;
}
button:focus-visible, a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 4px;
}
@media(max-width: 480px) {
    .choices { grid-template-columns: 1fr; }
    main { padding-top: 38px; }
    .story { font-size: 16px; }
}
</style>
</head>
<body>
<header>
    <div class="brand">THE LAST ARCANA</div>
    <div class="lang">
        <a href="?lang=id">ID</a>
        <a href="?lang=en">EN</a>
    </div>
</header>

<main>
    <div class="eyebrow">
        <?= $lang === 'id' ? 'ARSIP FRAGMEN' : 'FRAGMENT ARCHIVE' ?>
    </div>

    <h1><?= e($page['title']) ?></h1>

    <div class="story" id="storyText"></div>
    <div id="storySource" hidden><?= e($page['text'][$lang]) ?></div>

    <?php if ($page['choices']): ?>
    <form method="post" class="choices" id="choices" hidden>
        <?php foreach ($page['choices'] as $option): ?>
        <button class="choice" type="submit" name="choice"
                value="<?= e($option['id']) ?>">
            <small>CHOOSE YOUR PATH</small>
            <?= e($option['label'][$lang]) ?>
        </button>
        <?php endforeach; ?>
    </form>
    <?php else: ?>
    <div class="controls" id="choices" hidden>
        <a href="?reset=1">
            <?= $lang === 'id' ? 'Mulai kembali' : 'Begin again' ?>
        </a>
    </div>
    <?php endif; ?>

    <div class="controls">
        <button class="choice" id="skip" type="button">
            <?= $lang === 'id' ? 'Lewati animasi teks' : 'Skip text animation' ?>
        </button>
    </div>

    <div class="status">
        <?= $lang === 'id' ? 'FRAGMEN DITEMUKAN' : 'FRAGMENTS DISCOVERED' ?>:
        <?= count(array_filter($state['flags'], function ($key) {
            return str_starts_with($key, 'visited_');
        }, ARRAY_FILTER_USE_KEY)) ?>
        <br><br>
        <?= $lang === 'id'
            ? 'Setiap pilihan meninggalkan jejak.'
            : 'Every choice leaves a trace.' ?>
    </div>
</main>

<footer>THE ARCANA REMEMBERS.</footer>

<script>
const source = document.getElementById('storySource').textContent;
const output = document.getElementById('storyText');
const choices = document.getElementById('choices');
const skip = document.getElementById('skip');
let index = 0;
let finished = false;

function typeNext() {
    if (index >= source.length) {
        finishText();
        return;
    }
    output.textContent += source[index++];
    setTimeout(typeNext, 24);
}

function finishText() {
    finished = true;
    output.textContent = source;
    choices.hidden = false;
    skip.hidden = true;
}

skip.addEventListener('click', finishText);
typeNext();
</script>
</body>
</html>
