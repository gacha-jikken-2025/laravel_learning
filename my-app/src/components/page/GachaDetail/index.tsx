"use client"

import { useEffect, useState } from "react";
import style from "./index.module.scss";
import { GachaItemType } from "@/types/types";
import { notFound } from "next/navigation";

export default function GachaDetail({data}: {data: GachaItemType}) {
  
  const imagePath = `/assets/img/${data.result.id.toString().padStart( 2, '0')}_${data.result.code}.png`;

  return (
    <div className={style.page}>
      {data ?
        <div>
          <p>{data.result.item_name}</p>
          <p>{data.result.rarity === "0" ? "ノーマル" : "レア"}</p>
          <figure>
            <img src={imagePath} alt="" />
          </figure>
          <p>
            レア排出確率: {data.rate}
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
