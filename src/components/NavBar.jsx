import React from "react";
import romeralLogo from "../assets/logo.png";

const navbarLinks = [
  { to: "/", title: "Inicio" },
  { to: "/sobre-nosotros", title: "Sobre Nosotros" },
  { to: "/nuestra-programacion", title: "Nuestra Programacion" },
];

const NavBar = () => {
  return (
    <nav className='fixed flex items-center justify-between bg-orange-wheel-500 shadow-xl w-screen h-20 px-8 py-2 text-orange-wheel-50 text-2xl font-bold'>
      <ul className='flex items-center gap-2'>
        <li>
          <img
            className='w-12'
            src={romeralLogo}
            alt='Logo - Romeral Estereo'
          />
        </li>
        <li>Romeral Estereo</li>
      </ul>
      <ul className='flex items-center'>
        {navbarLinks.map((link, index) => (
          <li key={index} className='px-4'>
            <a href={link.to}>{link.title}</a>
          </li>
        ))}
      </ul>
    </nav>
  );
};

export default NavBar;
