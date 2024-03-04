import Vue from 'vue';
import vueInvoker from '../util/vueInvoker';
import vueCollection from '../vue/collection';
import { Select } from '../components/select';
import { Menu } from '../components/menu';
import { ModalFeedback } from '../components/modal-feedback';
import { ScrollHandler } from '../components/scroll-handler';
import { SearchFilter, ToggleFilter } from '../components/search-form';
import { FeedbackForm } from '../components/feedback-form';
import { Tabs } from '../components/tabs';
import { Tree } from '../components/tree';
import { Filter } from "../components/filter";
import { ButtonScroll } from "../components/button-scrollup";
import { InternationalPracticeReversal } from "../components/international-practice-reversal";
import { DocumentReference } from "../components/document-reference";
import { ComponentPager } from "../components/component-pager";
import { Diploma } from "../components/diploma";
import { Modal} from "../components/modal";
import { DocumentHeader } from "../components/documentHeader";
import { Accordion } from "../components/accordion";
import { TopNav } from "../components/top-nav";
import { Highlighter } from "../components/highlighter";
import { Mobile } from "../components/mobile";

export default {
  init() {
    // JavaScript to be fired on all pages

    vueInvoker.init(Vue, vueCollection);
    ScrollHandler();
    Select();
    Menu();
    ModalFeedback();
    SearchFilter();
    // ToggleFilter();
    FeedbackForm();
    Tabs();
    Tree();
    Filter();
    ButtonScroll();
    InternationalPracticeReversal();
    DocumentReference();
    ComponentPager();
    Diploma();
    Modal();
    DocumentHeader();
    Accordion();
    TopNav();
    Highlighter();
    window.highlighter = Highlighter;
    Mobile();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
