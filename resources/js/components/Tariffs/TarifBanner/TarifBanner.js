import { Flex } from "@mantine/core";
import bannerImg from '../../../../../public/images/tarif-banner.png';

export const TarifBanner = () => {
  return (
    <Flex direction='column' align='center'>
      <img className="tariffs-banner-img" src={bannerImg} alt="banner" />
      <h3 className="tariffs-banner-caption">Тиҷорати худро ба таври фоиданок автоматӣ кунед</h3>
      <p className="tariffs-banner-text"><span className="color-blue">Пулро сарфа кунед 20%</span> бо пардохти нимсола</p>
    </Flex>
  )
}