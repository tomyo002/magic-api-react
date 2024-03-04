import React, { useEffect, useState } from "react";
import { fetchAllElement } from "../services/api/Element";

export const BASE_URL = "http://localhost:8000/api/elements";

function ElementList() {
  const [eltData, setEltData] = useState([]);
  useEffect(() => {
    fetchAllElement().then((answer) => setEltData(answer["hydra:member"]));
  }, []);

  return eltData.map((elt) => (
    <a href={`element/${elt.id}`} className="text_lien">
      <div className="card">
        <div className="card__header">{elt.name}</div>
        <img
          className="icon"
          src={`${BASE_URL}/${elt.id}/icon`}
          alt={elt.name}
        />
      </div>
    </a>
  ));
}
export default ElementList;
