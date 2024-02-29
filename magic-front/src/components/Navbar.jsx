import React from "react";

function Navbar() {
  return(
    <span className="navbar">
      <a href="/keyword">
        <button type="button" className="btn">
          Mot-clé
        </button>
      </a>
      <a href="/extension">
        <button type="button" className="btn">
          Extension
        </button>
      </a>
      <a href="/">
        <button type="button" className="btn">
          page d'accueil
        </button>
      </a>
    </span>
  );
}

export default Navbar;