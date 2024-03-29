import {Controller} from '@hotwired/stimulus';

export default class extends Controller {

    collapse() {
        document.body.classList.toggle('sidebar-collapse')
    }

}

