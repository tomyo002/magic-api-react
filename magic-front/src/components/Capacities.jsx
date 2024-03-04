import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCapacityUrl } from "../services/api/Capacities";

function Capacities({ capacities }) {
  const [capData, setCapData] = useState([]);
  useEffect(() => {
    Promise.all(capacities.map(fetchCapacityUrl)).then(setCapData);
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
  capacities: PropTypes.node,
};
