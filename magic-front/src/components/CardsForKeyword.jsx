import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCard, fetchKeywordCard, fetchKeywordwithId } from "../services/api/Keywords.js";
import CostCard from "./CostCard.jsx";
import CardForKeywordCards from "./CardForKeywordCards.jsx";

function CardsForKeyword({id = 1}) {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchKeywordwithId(id).then((answer) => {
      setKeyData(answer);
      }
    )
  }, []);
  const lstCard =
    <>
      <div className="header__title key__title">{keyData.name}</div>
      {!keyData.keywordCards ? <></> : keyData.keywordCards.map((keyCard) => <CardForKeywordCards url={keyCard} />)}
    </>
  return lstCard;
}

export default CardsForKeyword;

CardsForKeyword.propTypes = {
  id: PropTypes.string,
}