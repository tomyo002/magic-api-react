export const BASE_URL = "http://localhost:8000";

export async function fetchCapacity(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}
