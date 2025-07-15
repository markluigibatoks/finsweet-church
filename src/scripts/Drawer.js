class Drawer {
    constructor(drawerSelector, toggleSelector, closeSelector) {
        this.drawer = document.querySelector(drawerSelector)
        this.toggle = document.querySelector(toggleSelector)
        this.hamburger = this.toggle?.querySelector('.group')
        this.close = closeSelector ? document.querySelector(closeSelector) : null

        if (this.toggle && this.drawer) {
            this.toggle.addEventListener('click', () => this.toggleDrawer())
        }

        if (this.close && this.drawer) {
            this.close.addEventListener('click', () => this.closeDrawer())
        }

        if (this.drawer) {
            this.drawer.addEventListener('click', (e) => {
                if (this.drawer.contains(e.target)) this.closeDrawer()
            })
        }

        window.addEventListener('resize', this.handleResize.bind(this))
    }

    toggleDrawer() {
        const isOpen = this.hamburger.classList.contains('open')
        if(isOpen) {
            this.closeDrawer()
        } else {
            this.openDrawer()
        }
    }

    openDrawer() {
        this.hamburger.classList.add('open')
        this.drawer.classList.remove('h-0')
        this.drawer.classList.add('h-screen')
    }

    closeDrawer() {
        this.hamburger.classList.remove('open')
        this.drawer.classList.remove('h-screen') 
        this.drawer.classList.add('h-0')
    }

    handleResize() {
        const currentWidth = window.innerWidth;
        const isLargeViewport = currentWidth >= 1024;
        const isOpen = this.hamburger.classList.contains('open');

        if(isLargeViewport && isOpen) {
            this.closeDrawer()
        }
    }
}

export default Drawer