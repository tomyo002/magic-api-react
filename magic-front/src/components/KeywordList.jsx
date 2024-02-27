import React, { useEffect, useState } from "react";
import { fetchAllKeyword } from "../services/api/Keywords";

function KeywordList() {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchAllKeyword().then((answer) => setKeyData(answer["hydra:member"]));
  }, []);

  const lstKey = keyData.map((key) => (
    // eslint-disable-next-line react/jsx-filename-extension
    <div className="card">
      <div>{key.name}</div>
      <div>description : {key.description}</div>
    </div>
  ));
  return (
    <>
      {lstKey}
      <a href="/">
        <button type="button" className="btn">
          retour
        </button>
      </a>
    </>
  );
}
export default KeywordList;
