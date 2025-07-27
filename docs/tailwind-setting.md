```
npm init -y
```

Tailwind + PostCSS + Autoprefixerをインストール
```
npm install -D tailwindcss postcss autoprefixer
```

Tailwind設定ファイル作成
```
npx tailwindcss init
```

tailwind.config.jsを修正
```
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

assets/css/tailwind.cssを作成
```
@tailwind base;
@tailwind components;
@tailwind utilities;

```

functions.cssで読み込み
```
function custombase_enqueue_assets()
{
    // CSSの読み込み
    wp_enqueue_style(
        'custombase-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // Tailwindの読み込み
    wp_enqueue_style(
        'custombase-tailwind',
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/tailwind.css')
    );

    // JSの読み込み
    wp_enqueue_script(
        'custombase-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/script.js'),
        true // フッターで読み込む
    );
}
add_action('wp_enqueue_scripts', 'custombase_enqueue_assets');
```

.gitignore
```
node_modules/
```