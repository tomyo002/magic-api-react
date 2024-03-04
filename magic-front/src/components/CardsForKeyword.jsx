import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import CardForKeywordCards from "./CardForKeywordCards";
import { fetchKeywordId } from "../services/api/Keywords";

function CardsForKeyword({ id = 1 }) {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchKeywordId(id).then(setKeyData);
  }, []);

  return (
    <>
      <div className="header__title key__title">{keyData.name}</div>
      {keyData.keywordCards ?  keyData.keywordCards.map((keyCard) => (
            <CardForKeywordCards url={keyCard} key={keyCard} />
          ))
        : null}
    </>
  );
}

export default CardsForKeyword;

CardsForKeyword.propTypes = {
  id: PropTypes.string,
};
