// Show menu
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

// Menu show
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

// Menu hidden
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

// Remove menu mobile
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

// Shadow header
const shadowHeader = () =>{
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add('shadow-header') 
                       : header.classList.remove('shadow-header')
}
window.addEventListener('scroll', shadowHeader)

// Email JS - https://www.emailjs.com/
const contactForm = document.getElementById('contact-form'),
      contactMessage = document.getElementById('contact-message')

if (contactForm && contactMessage) {
    const submitButton = contactForm.querySelector('.contact__button')
    const submitButtonDefaultHTML = submitButton ? submitButton.innerHTML : ''
    let contactMessageTimeout
    let isSubmitting = false

    contactMessage.setAttribute('role', 'status')
    contactMessage.setAttribute('aria-live', 'polite')
    contactMessage.setAttribute('aria-atomic', 'true')

    const clearContactMessage = () => {
        contactMessage.textContent = ''
        contactMessage.classList.remove(
            'is-visible',
            'contact__message--loading',
            'contact__message--success',
            'contact__message--error'
        )
    }

    const setContactMessage = (text, status = 'loading', timeout = 0) => {
        if (contactMessageTimeout) clearTimeout(contactMessageTimeout)

        contactMessage.textContent = text
        contactMessage.classList.remove(
            'contact__message--loading',
            'contact__message--success',
            'contact__message--error'
        )
        contactMessage.classList.add('is-visible', `contact__message--${status}`)
        contactMessage.setAttribute('aria-live', status === 'error' ? 'assertive' : 'polite')

        if (timeout > 0) contactMessageTimeout = setTimeout(clearContactMessage, timeout)
    }

    const setSubmitState = (loading) => {
        if (!submitButton) return

        submitButton.disabled = loading
        submitButton.classList.toggle('is-loading', loading)
        submitButton.innerHTML = loading
            ? '<i class="ri-loader-4-line"></i> Mengirim...'
            : submitButtonDefaultHTML
    }

    const sendEmail = async (e) => {
        e.preventDefault()
        if (isSubmitting) return

        isSubmitting = true
        setSubmitState(true)
        setContactMessage('Sedang mengirim pesan...', 'loading')

        try {
            // serviceID - templateID - #form - publicKey
            await emailjs.sendForm('service_mi3kw93', 'template_cny38mo', '#contact-form', 'ezkZ7UowDPFNayMva')
            setContactMessage('Pesan berhasil dikirim. Terima kasih!', 'success', 5000)
            contactForm.reset()
        } catch (error) {
            setContactMessage('Pesan gagal dikirim. Silakan coba lagi.', 'error', 7000)
            console.error('EmailJS error:', error)
        } finally {
            isSubmitting = false
            setSubmitState(false)
        }
    }

    contactForm.addEventListener('submit', sendEmail)
}

// Show scroll up
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

// Scroll sections active link
const sections = document.querySelectorAll('section[id]')

const scrollActive = () => {
   const scrollY = window.scrollY

   sections.forEach(section => {
      const id = section.id,
            top = section.offsetTop - 50,
            height = section.offsetHeight,
            link = document.querySelector('.nav__menu a[href*=' + id + ']')

      if(!link) return

      link.classList.toggle('active-link', scrollY > top && scrollY <= top + height)
   })
}
window.addEventListener('scroll', scrollActive)

// Projects filter
const projectsFilters = document.querySelectorAll('.projects__filter')
const projectsCards = document.querySelectorAll('.projects__card')

if (projectsFilters.length && projectsCards.length) {
    const filterProjects = (filterValue = 'all') => {
        projectsCards.forEach((card) => {
            const isMatch = filterValue === 'all' || card.dataset.category === filterValue
            card.classList.toggle('is-hidden', !isMatch)
        })
    }

    projectsFilters.forEach((filterButton) => {
        filterButton.addEventListener('click', () => {
            const filterValue = filterButton.dataset.filter || 'all'

            projectsFilters.forEach((button) => button.classList.remove('is-active'))
            filterButton.classList.add('is-active')

            filterProjects(filterValue)
        })
    })

    const initialFilter = document.querySelector('.projects__filter.is-active')?.dataset.filter || 'all'
    filterProjects(initialFilter)
}

// Dark Light Theme
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

if (selectedTheme) {
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

themeButton.addEventListener('click', () => {
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

// ScrollReveal: https://scrollrevealjs.org/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: false
})

sr.reveal(`.home__perfil, .about__image, .contact__mail`, {origin: 'right'})
sr.reveal(`.home__name, .home__info,
           .about__container .section__title-1, .about__info
           .contact__social, .contact__data`, {origin: 'left'})
sr.reveal(`.services__card, .projects__card`, {interval: 100})
