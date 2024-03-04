import React, { useEffect, useState } from "react";
import { fetchAllElement } from "../services/api/Element";
import { URL_ELEMENT } from "../services/url/BaseUrl";

function ElementList() {
  const [eltData, setEltData] = useState([]);
  useEffect(() => {
    fetchAllElement().then((elements) => setEltData(elements["hydra:member"]));
  }, []);

  return eltData.map((elt) => (
    <a href={`element/${elt.id}`} className="text_lien" key={elt.id}>
      <div className="card">
        <div className="card__header">{elt.name}</div>
        <img
          className="icon"
          src={`${URL_ELEMENT.iconUrl(elt.url)}/icon`}
          alt={elt.name}
        />
      </div>
    </a>
  ));
}
export default ElementList;
