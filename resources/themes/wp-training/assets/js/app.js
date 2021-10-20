/**
 * vewport-extraを有効にする場合はインストールしてコメントアウトを削除
 * npm i viewport-extra
 */

// import './module/viewport'

//import Menu from './module/menu'
import StickyHeader from './module/header'
import Navigation from './module/navigation'
import Scrolling from './module/scrolling'
import Slider from './module/slider'

window.addEventListener('load', function () {
    //menu
    //new Menu()
    new StickyHeader('js-header')
    new Navigation('header-menu')
    new Scrolling('js-catch').parallax()
    new Scrolling('js-feature').fadeIn()
    new Slider('js-feature')

});