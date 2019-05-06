# Vazir-Font
A Persian (Farsi) Font

[![Build Status](../../../../../../index.phpvis-ci.org/rastikerdar/vazir-font.svg?branch=master)](../../../../../../index.phpvis-ci.org/rastikerdar/vazir-font)
[![npm version](../../../../../../index.phpge.fury.io/js/vazir-font.svg)](../../../../../../index.phpge.fury.io/js/vazir-font)

فونت فارسی وزیر  
[نمایش فونت - صفحه رسمی پروژه](../../../../../../index.phptikerdar.github.io/vazir-font/)  
[صفحه دریافت (دانلود) بسته فونت شامل فایل های ttf,woff,eot](../../../../../../index.phphub.com/rastikerdar/vazir-font/releases)  
با تشکر از برنامه [FontForge](../../../../../../index.phptforge.github.io)  
بر مبنای فونت [DejaVu Sans 2.35](../../../../../../index.phpavu-fonts.github.io)  
نسخه های بدون حروف لاتین یا تمام ارقام فارسی درون بسته فشرده موجود می‌باشد.  

## نمونه متن Sample:
![نمونه متن فونت وزیر](../../../../../../index.phpg)

## طریقه استفاده در صفحات وب:

<p dir="rtl">
کد زیر را در قسمت style یا فایل css وارد نمایید:
</p>


```css
@font-face {
    font-family: Vazir;
    src: url('Vazir.eot');
    src: url('Vazir.eot?#iefix') format('embedded-opentype'),
         url('Vazir.woff2') format('woff2'),
         url('Vazir.woff') format('woff'),
         url('Vazir.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Bold.eot');
    src: url('Vazir-Bold.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Bold.woff2') format('woff2'),
         url('Vazir-Bold.woff') format('woff'),
         url('Vazir-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Black.eot');
    src: url('Vazir-Black.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Black.woff2') format('woff2'),
         url('Vazir-Black.woff') format('woff'),
         url('Vazir-Black.ttf') format('truetype');
    font-weight: 900;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Medium.eot');
    src: url('Vazir-Medium.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Medium.woff2') format('woff2'),
         url('Vazir-Medium.woff') format('woff'),
         url('Vazir-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Light.eot');
    src: url('Vazir-Light.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Light.woff2') format('woff2'),
         url('Vazir-Light.woff') format('woff'),
         url('Vazir-Light.ttf') format('truetype');
    font-weight: 300;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Thin.eot');
    src: url('Vazir-Thin.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Thin.woff2') format('woff2'),
         url('Vazir-Thin.woff') format('woff'),
         url('Vazir-Thin.ttf') format('truetype');
    font-weight: 100;
    font-style: normal;
}
```

## Install

#### Download
Grab the [latest release](../../../../../../index.phphub.com/rastikerdar/vazir-font/releases/latest) file.

#### Bower
```
bower install vazir-font --save
```

#### npm
```
npm install vazir-font
```
Fonts will be copied to `node_modules/vazir-font/dist` directory

#### CDN
Link fonts from the [RawGit](../../../../../../index.phpgit.com) CDN:

```html
<link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v[X.Y.Z]/dist/font-face.css" rel="stylesheet" type="text/css" />
```

Replace [X.Y.Z] with the latest version (e.g. 19.2.0) and integrate the font into your CSS:

```
font-family: 'Vazir', sans-serif;
```

#### Homebrew
You can install the font on macOS machines by tapping the caskroom/fonts repo:

```shell
brew tap caskroom/fonts
brew install font-vazir
```

#### Arch Linux
Arch user's could use [vazir-fonts](../../../../../../index.php.archlinux.org/packages/vazir-fonts/) package from [AUR](../../../../../../index.php.archlinux.org/) repository to install vazir font.
Use your favourite [AUR helper](../../../../../../index.phpi.archlinux.org/index.php/AUR_helpers) like pacaur or yaourt for installing package:

```shell
pacaur -S vazir-fonts
```
#### Ubuntu
An unofficial PPA is available for installing Vazir and other free Persian fonts. It only works on Ubuntu 18.04 and higher. Open a Terminal and enter these commands:
```shell
sudo add-apt-repository ppa:blacksuited/fonts
sudo apt install fonts-vazir
```

## License
2015 Saber Rastikerdar ([@rastikerdar](../../../../../../index.phphub.com/rastikerdar)). See the `LICENSE` file.
