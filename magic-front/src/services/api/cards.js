// eslint-disable-next-line import/prefer-default-export
export const BASE_URL = "http://localhost:8000";

export async function fetchAllCards() {
  const reponse = await fetch(`${BASE_URL}/api/cards`);
  return reponse.json();
}
export async function fetchCard(id) {
  const reponse = await fetch(`${BASE_URL}/api/cards/${id}`)
  return reponse.json();
}
