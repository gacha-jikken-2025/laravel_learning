"use client"

import { useEffect, useState } from "react";
import style from "./index.module.scss";
import { GachaItemType } from "@/types/types";
import { notFound } from "next/navigation";

export default function TopPage() {
  const [item, setItems] = useState<GachaItemType>();

  const getGachaResult = async () => {
      // console.log(json)

      try {
        const response = await fetch('http://localhost:8000/api/gacha/1');
        const json = await response.json();
        setItems(json);
      } catch (error) {
        return notFound();
      }
  }

  useEffect(() => {
    getGachaResult();
  }, []);
  
  const imageId = item ? (item.result.id).toString().padStart( 2, '0') : "";

  return (
    <div className={style.page}>
      {item ?
        <div>
          <p>{item.result.item_name}</p>
          <p>{item.result.rarity === "0" ? "ノーマル" : "レア"}</p>
          <figure>
            <img src={`/assets/img/${imageId}_${item.result.code}.png`} alt="" />
          </figure>
          <p>
            レア排出確率: {item.rate}
          </p>
        </div>
        :
        <div>
          loading...
        </div>
      }
    </div>
  );
}
