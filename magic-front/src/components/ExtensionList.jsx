import React, { useEffect, useState } from "react";
import { fetchAllExtension } from "../services/api/Extension";

function ExtensionList() {
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchAllExtension().then((extensions) =>
      setExtData(extensions["hydra:member"]),
    );
  }, []);
  const lstExt = extData.map((ext) => (
    <a href={`/extension/${ext.id}`} className="text_lien" key={ext.id}>
      <div className="card">
        <div>nom : {ext.name}</div>
        <div>année de sortie : {ext.releaseYear}</div>
      </div>
    </a>
  ));

  return (
    // eslint-disable-next-line react/jsx-no-useless-fragment
    <>{lstExt}</>
  );
}
export default ExtensionList;
