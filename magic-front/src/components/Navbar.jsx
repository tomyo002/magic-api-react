import React from "react";

function Navbar() {
  return(
    <>
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
    </>
  );
}

export default Navbar;