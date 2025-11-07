Array.from(document.querySelectorAll("[data-lightbox]")).forEach(r=>{r.onclick=c=>{c.preventDefault(),basicLightbox.create(`<img src="${r.href}">`).show()}});
