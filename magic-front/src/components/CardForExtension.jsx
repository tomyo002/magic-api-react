import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import CardExtension from "./CardExtension";
import { fetchExtensionId } from "../services/api/Extension";

function CardForExtension({ id = 1 }) {
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchExtensionId(id).then(setExtData);
  }, []);

  return (
    <>
      <div className="header__title key__title">{extData.name}</div>
      {extData.cards
        ? extData.cards.map((card) => <CardExtension url={card} />)
        : null}
    </>
  );
}

export default CardForExtension;

CardForExtension.propTypes = {
  id: PropTypes.string,
};
