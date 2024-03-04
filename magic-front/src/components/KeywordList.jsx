import React, { useEffect, useState } from "react";
import { fetchAllKeyword } from "../services/api/Keywords";

function KeywordList() {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchAllKeyword().then((keywords) => setKeyData(keywords["hydra:member"]));
  }, []);

  const lstKey = keyData.map((key) => (
    <a href={`/keyword/${key.id}`} className="text_lien" key={key.id}>
      <div className="card">
        <div className="card__header text_lien">{key.name}</div>
        <div className="card__main text_lien">
          description : {key.description}
        </div>
      </div>
    </a>
  ));

  return <>{lstKey}</>;
}
export default KeywordList;
