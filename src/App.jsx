import { useEffect, useState } from 'react'
import logo from './assets/Log.svg'
import buscadorIcon from './assets/buscador.svg'
import carritoIcon from './assets/carrito.svg'
import usuarioIcon from './assets/usuario.svg'
import placeholderImage from './assets/fantasmin.svg'
import bannerImg from './assets/mujer1.jpg'
import './App.css'

function App() {
  const [showHeader, setShowHeader] = useState(true)
  const [lastScrollY, setLastScrollY] = useState(0)

  const products = [
    {
      id: 1,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    {
      id: 2,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    {
      id: 3,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
      {
      id: 4,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    {
      id: 5,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    { 
      id: 6,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
      {
      id: 7,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    {
      id: 8,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
    {
      id: 9,
      image: placeholderImage,
      name: 'Carta de prueba',
      price: '$0.00',
    },
  ] 

  useEffect(() => {
    const handleScroll = () => {
      const currentScrollY = window.scrollY
      if (currentScrollY > lastScrollY && currentScrollY > 20) {
        setShowHeader(false)
      } else {
        setShowHeader(true)
      }
      setLastScrollY(currentScrollY)
    }

    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [lastScrollY])

  return (
    <div className="min-h-screen bg-gray-50">
      <header
        className={`fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-200 shadow-sm transition-transform duration-300 ease-in-out ${
          showHeader ? 'translate-y-0' : '-translate-y-full'
        }`}
      >
        <div className="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6">
          <div className="w-16" />  

          <div className="flex justify-center">
            <img src={logo} alt="Logo" className="h-25 w-auto" />    
          </div>   

          <div className="flex items-center gap-4">
            <img src={buscadorIcon} alt="Buscar" className="h-8 w-8" />
            <img src={carritoIcon} alt="Carrito" className="h-8 w-8" />
            <img src={usuarioIcon} alt="Usuario" className="h-8 w-8" />   
          </div>

        </div>
      </header>

      <div className="pt-40 mx-auto mt-6 max-w-6xl px-4">    
        <div className="relative rounded-2xl overflow-hidden"> 
          <img src={bannerImg} alt="Banner" className="h-auto w-full object-contain sm:h-80 md:h-auto" /> 
          <div className="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent" />    
          <button className="absolute left-1/2 bottom-6 -translate-x-1/2 rounded-full bg-white/95 hover:bg-white/50 px-6 py-2 text-sm font-semibold text-black shadow-sm hover:bg-white">
            Compra ya
          </button>
        </div>
      </div>

      <section className="mx-auto mt-10 max-w-6xl">
          <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            {products.map((product) => (
              <article
                key={product.id}
                className="overflow-hidden rounded-3xl border border-gray-200 bg-white p-4 text-center shadow-sm transition hover:-translate-y-1 hover:shadow-md"
              >
                <div className="aspect-square overflow-hidden rounded-3xl bg-gray-100 p-5">
                  <img src={product.image} alt={product.name} className="h-full w-full object-contain" />
                </div>
                <h2 className="mt-4 text-base font-semibold text-gray-900">{product.name}</h2>
                <p className="mt-2 text-sm text-gray-500">{product.price}</p>
              </article>
            ))}
          </div>
        </section>

      <footer className="mt-12 border-t border-gray-200 bg-white/50">
        <div className="mx-auto max-w-6xl px-4 py-8 flex w-full flex-col items-center gap-6 sm:flex-row sm:justify-between sm:items-start">
          <div className="flex flex-col items-center sm:items-start gap-3">
            <nav className="flex gap-4 text-sm text-gray-600">
              <a href="#" onClick={(e)=>e.preventDefault()}>FAQs</a>
              <a href="#" onClick={(e)=>e.preventDefault()}>Términos</a>
              <a href="#" onClick={(e)=>e.preventDefault()}>Privacidad</a>
            </nav>
            <div className="flex gap-3 mt-2">
              <img src={placeholderImage} alt="Social 1" className="h-6 w-6" />
              <img src={placeholderImage} alt="Social 2" className="h-6 w-6" />
              <img src={placeholderImage} alt="Social 3" className="h-6 w-6" />
            </div>
          </div>

          <p className="text-center text-sm text-gray-500">Rouge Garments 2026 Todos los derechos reservados</p>
        </div>
      </footer>

    </div>
  )
}

export default App;
