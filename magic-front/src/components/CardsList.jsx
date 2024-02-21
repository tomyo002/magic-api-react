import React, { useEffect, useState } from "react";
import { fetchAllCards } from "../services/api/cards";
import CostCard from "./CostCard";
import {navigate} from "wouter/use-hash-location";

function CardsList() {
  const [cardsData, setCardsData] = useState([]);

  useEffect(() => {
    fetchAllCards().then((answer) => setCardsData(answer["hydra:member"]));
  }, []);
  const lstCards = cardsData.map((card) => (
    <div className="card" key={card.id}>
      <article className="card__header header__title article__card">
        {card.name} <div><CostCard costs={card.costs} /></div>
      </article>
        <a href={`/card/${card.id}`}><button type="button" className='btn' >plus info</button></a>
    </div>
  ));
  return <div>{lstCards}</div>;
}
export default CardsList;
