/**
 * vewport-extraを有効にする場合はインストールしてコメントアウトを削除
 * npm i viewport-extra
 */

// import './module/viewport'

//import Menu from './module/menu'
import StickyHeader from './module/header'
import Scrolling from './module/scrolling'

window.addEventListener('load', function () {
    //menu
    //new Menu()
    new StickyHeader('js-header')
    new Scrolling('js-catch').parallax()
});