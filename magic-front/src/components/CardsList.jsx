import React, { useEffect, useState } from "react";
import { fetchAllCards } from "../services/api/cards";

function CardsList() {
  const [cardsData, setCardsData] = useState([]);

  useEffect(() => {
    fetchAllCards().then((answer) => setCardsData(answer["hydra:member"]));
  }, []);

  const lstCards = cardsData.map((card) => (
    <div className="card">
      <article className="card__header header__title">{card.name}</article>
    </div>
  ));
  return <div>{lstCards}</div>;
}
export default CardsList;
