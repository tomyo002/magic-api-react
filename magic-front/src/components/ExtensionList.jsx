import React, { useEffect, useState } from "react";
import { fetchAllExtension } from "../services/api/Extension";

function ExtensionList() {
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchAllExtension().then((answer) => setExtData(answer["hydra:member"]));
  }, []);
  const lstExt = extData.map((ext) => (
    <div className="card">
      <div>nom : {ext.name}</div>
      <div>année de sortie : {ext.releaseYear}</div>
    </div>
  ));
  return (
    <>
      {lstExt}
      <a href="/">
        <button type="button" className="btn">
          retour
        </button>
      </a>
    </>
  );
}
export default ExtensionList;
