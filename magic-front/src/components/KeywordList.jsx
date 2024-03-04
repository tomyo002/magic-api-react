import React, { useEffect, useState } from "react";
import { fetchAllKeyword } from "../services/api/Keywords";

function KeywordList() {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchAllKeyword().then((keywords) => setKeyData(keywords["hydra:member"]));
  }, []);

  const lstKey = keyData.map((key) => (
    // eslint-disable-next-line react/jsx-filename-extension
    <a href={`/keyword/${key.id}`} className="text_lien">
      <div className="card">
        <div className="card__header text_lien">{key.name}</div>
        <div className="card__main text_lien">
          description : {key.description}
        </div>
      </div>
    </a>
  ));

  return (
    // eslint-disable-next-line react/jsx-no-useless-fragment
    <>{lstKey}</>
  );
}
export default KeywordList;
