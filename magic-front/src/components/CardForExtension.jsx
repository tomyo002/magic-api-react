import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchExtension } from "../services/api/Extension";
import CardExtension from "./CardExtension";

function CardForExtension({ id = 1 }) {
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchExtension(id).then((answer) => setExtData(answer));
  }, []);

  return (
    <>
      <div className="header__title key__title">{extData.name}</div>
      {!!extData.cards ?  (
        extData.cards.map((card) => <CardExtension url={card} />)
      ) : null}
    </>
  );
}

export default CardForExtension;

CardForExtension.propTypes = {
  id: PropTypes.string,
};
