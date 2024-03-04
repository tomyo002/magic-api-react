import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchKeywordwithId } from "../services/api/Keywords";
import CardForKeywordCards from "./CardForKeywordCards";

function CardsForKeyword({ id = 1 }) {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchKeywordwithId(id).then((answer) => {
      setKeyData(answer);
    });
  }, []);

  return (
    <>
      <div className="header__title key__title">{keyData.name}</div>
      {keyData.keywordCards ?  keyData.keywordCards.map((keyCard) => (
            <CardForKeywordCards url={keyCard} />
          ))
        : null}
    </>
  );
}

export default CardsForKeyword;

CardsForKeyword.propTypes = {
  id: PropTypes.string,
};
