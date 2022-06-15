window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scroll',window.scrollY > 0)
})
//show\hide faq
const faq=document.querySelectorAll('.faq');
faqs.foreach(faq => {
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');
    })
})