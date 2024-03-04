import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCapacity } from "../services/api/Capacities";

function Capacities({ capacities }) {
  const [capData, setCapData] = useState([]);
  useEffect(() => {
    Promise.all(capacities.map(fetchCapacity)).then(setCapData);
  }, []);

  return (
    <>
      {capData.map((cap) => (
        <div key={cap}>{cap.description}</div>
      ))}
    </>
  );
}
export default Capacities;

Capacities.propTypes = {
  // eslint-disable-next-line react/require-default-props
  capacities: PropTypes.node,
};
