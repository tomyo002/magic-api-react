import React, { useEffect, useState } from "react";
import { fetchAllCards } from "../services/api/cards";
import CostCard from "./CostCard";

function CardsList() {
  const [cardsData, setCardsData] = useState([]);

  useEffect(() => {
    fetchAllCards().then((answer) => setCardsData(answer["hydra:member"]));
  }, []);
  const lstCards = cardsData.map((card) => (
    <div className="card" key={card.id}>
      <article className="card__header header__title">
        {card.name} <CostCard costs={card.costs} />
      </article>
    </div>
  ));
  return <div>{lstCards}</div>;
}
export default CardsList;
