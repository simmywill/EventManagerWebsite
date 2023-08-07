import "../css/style.css"

// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';

// Our modules / classes
import MobileMenu from '../src/modules/MobileMenu';
import HeroSlider from '../src/modules/HeroSlider';
import MyNotes from '../src/modules/MyNotes'

// Instantiate a new object using our modules/classes
var mobileMenu = new MobileMenu();
var heroSlider = new HeroSlider();
var myNotes = new MyNotes();