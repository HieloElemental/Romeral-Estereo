import { Bars3Icon } from "@heroicons/react/24/solid";
import romeralLogo from "../assets/logo.png";
import { useState } from "react";

const navbarLinks = [
  { to: "/", title: "Inicio" },
  { to: "/sobre-nosotros", title: "Sobre Nosotros" },
  { to: "/nuestra-programacion", title: "Nuestra Programacion" },
];

const NavBar = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const onOpenMenuHandler = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  return (
    <nav
      className='fixed flex items-center justify-between z-10 bg-orange-wheel-600 shadow-xl w-screen h-16 lg:px-8 md:px-4 text-orange-wheel-50 text-xl font-bold'
      style={{
        backgroundImage: `url("data:image/svg+xml,%3Csvg width='42' height='44' viewBox='0 0 42 44' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='Page-1' fill='none' fill-rule='evenodd'%3E%3Cg id='brick-wall' fill='rgb(247,228,176)' fill-opacity='0.4'%3E%3Cpath d='M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")`,
      }}
    >
      <ul className='w-full px-8 md:w-auto md:p-0 flex items-center'>
        <li>
          <img
            className='w-12'
            src={romeralLogo}
            alt='Logo - Romeral Estereo'
          />
        </li>
        <li>
          <a href='/' className='pl-4 h-16 flex items-center'>
            Romeral Estereo
          </a>
        </li>
      </ul>
      <ul className=''>
        <li>
          <figure
            onClick={onOpenMenuHandler}
            className='mr-4 md:w-0 flex items-center justify-center w-16 h-16 cursor-pointer'
          >
            <Bars3Icon className='w-8 h-8' />
          </figure>
        </li>
      </ul>
      <ul
        className={`fixed top-16 md:relative md:top-0 flex flex-col gap-1 md:flex-row items-center justify-start md:justify-center h-full bg-orange-wheel-900 bg-opacity-90 md:bg-none md:bg-opacity-0 w-10/12 md:w-auto transition-all ${
          isMenuOpen ? "left-0" : "-left-full"
        } md:left-auto`}
      >
        {navbarLinks.map((link, index) => (
          <li key={index} className='w-full md:w-auto'>
            <a
              className='px-4 h-16 flex items-center justify-center bg-orange-wheel-800 md:bg-none md:bg-opacity-0 w-full text-center'
              href={link.to}
            >
              {link.title}
            </a>
          </li>
        ))}
      </ul>
    </nav>
  );
};

export default NavBar;
