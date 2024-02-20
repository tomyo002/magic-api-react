import React from "react";
import PropTypes from "prop-types";
import Cost from "./Cost";

function CostCard({ costs }) {
  return costs.map((c) => <Cost cost={c} />);
}
export default CostCard;

CostCard.propTypes = {
  costs: PropTypes.node,
};
