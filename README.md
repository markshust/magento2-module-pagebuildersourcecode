<h1 align="center">MarkShust_PageBuilderSourceCode</h1> 

<div align="center">
  <p>Adds a Source Code button to the toolbar of the Page Builder WYSIWYG editor.</p>
  <img src="https://img.shields.io/badge/magento-^2.3.2-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/markshust/magento2-module-pagebuildersourcecode" target="_blank"><img src="https://img.shields.io/packagist/v/markshust/magento2-module-pagebuildersourcecode.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/markshust/magento2-module-pagebuildersourcecode" target="_blank"><img src="https://poser.pugx.org/markshust/magento2-module-pagebuildersourcecode/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

## Table of contents

- [Summary](#summary)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Summary

Page Builder does not come with a way to edit the HTML source code when editing a text block. Sometimes it is desired to override the default styles and edit the HTML manually. This module adds the "code" icon to the toolbar to allow this capability.

If you'd like to learn a bit more about why & how you'd use this module, check out the <a href="https://www.youtube.com/watch?v=12oyP-4Iebw" target="_blank">explainer video of this module</a>, created by <a href="https://www.youtube.com/channel/UCnkPBx_DwgNcdz_-TJSI-tg" target="_blank">Webverse</a>.

## Requirements

This module requires the Page Builder module, which comes installed with Magento Commerce 2.3.1.

## Installation

```
composer require markshust/magento2-module-pagebuildersourcecode
bin/magento module:enable MarkShust_PageBuilderSourceCode
bin/magento setup:upgrade
```

## Usage

This module has no configuration. Just install, and you'll see the code icon in the Page Builder WYSIWYG editor toolbar.

![Screenshot](https://raw.githubusercontent.com/markshust/magento2-module-pagebuildersourcecode/master/docs/demo-20240316.png)

## License

[MIT](https://opensource.org/licenses/MIT)
